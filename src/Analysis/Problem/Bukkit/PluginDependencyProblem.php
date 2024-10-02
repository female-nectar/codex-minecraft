<?php

namespace Aternos\Codex\Minecraft\Analysis\Problem\Bukkit;

use Aternos\Codex\Analysis\InsightInterface;
use Aternos\Codex\Minecraft\Analysis\Solution\Bukkit\PluginInstallSolution;
use Aternos\Codex\Minecraft\Analysis\Solution\File\FileDeleteSolution;
use Aternos\Codex\Minecraft\Translator\Translator;

/**
 * Class PluginDependencyProblem
 *
 * @package Aternos\Codex\Minecraft\Analysis\Problem\Bukkit
 */
class PluginDependencyProblem extends BukkitProblem
{
    protected ?string $pluginPath = null;
    protected ?string $pluginName = null;
    protected ?string $dependencyPluginName = null;

    /**
     * @return string|null
     */
    public function getPluginPath(): ?string
    {
        return $this->pluginPath;
    }

    /**
     * @return string|null
     */
    public function getPluginName(): ?string
    {
        return $this->pluginName;
    }

    /**
     * @return string|null
     */
    public function getDependencyPluginName(): ?string
    {
        return $this->dependencyPluginName;
    }

    /**
     * Get a human-readable message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return Translator::getInstance()->getTranslation("plugin-dependency-problem", [
            "plugin-name" => $this->getPluginName(),
            "dependency-plugin-name" => $this->getDependencyPluginName()
        ]);
    }

    /**
     * Get an array of possible patterns
     *
     * The array key of the pattern will be passed to setMatches()
     *
     * @return string[]
     */
    public static function getPatterns(): array
    {
        return [
            '/Could not load \'(plugins[\/\\\][^\']+\.jar)\' in (?:folder )?\'[^\']+\''
            . '\norg\.bukkit\.plugin\.UnknownDependencyException\: (?:(\w+)\n|Unknown dependency (\w+)\.)/'];
    }

    /**
     * Apply the matches from the pattern
     *
     * @param array $matches
     * @param mixed $patternKey
     * @return void
     */
    public function setMatches(array $matches, mixed $patternKey): void
    {
        $this->pluginPath = str_replace("plugins/.paper-remapped/", "plugins/", $matches[1]);
        $this->pluginName = pathinfo($this->pluginPath, PATHINFO_FILENAME);
        $this->dependencyPluginName = $matches[2] ?: $matches[3];

        $this->addSolution((new PluginInstallSolution())->setPluginName($this->getDependencyPluginName()));
        $this->addSolution((new FileDeleteSolution())->setRelativePath($this->getPluginPath()));
    }

    /**
     * @param InsightInterface $insight
     * @return bool
     */
    public function isEqual(InsightInterface $insight): bool
    {
        return $insight instanceof static
            && $this->getPluginName() === $insight->getPluginName()
            && $this->getPluginPath() === $insight->getPluginPath()
            && $this->getDependencyPluginName() === $insight->getDependencyPluginName();
    }
}