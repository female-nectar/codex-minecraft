<?php

namespace Aternos\Codex\Minecraft\Log;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Analyser\BukkitAnalyser;

/**
 * Class OldCraftBukkitLog
 *
 * @package Aternos\Codex\Minecraft\Log
 */
class OldCraftBukkitLog extends OldVanillaLog
{
    protected static string $logIdentifier = "CraftBukkit version git\-Bukkit";

    /**
     * @return BukkitAnalyser
     */
    public static function getDefaultAnalyser(): BukkitAnalyser
    {
        return new BukkitAnalyser();
    }

    /**
     * @return array
     */
    public static function getDetectors(): array
    {
        return array_merge(parent::getDetectors(), [
            (new SinglePatternDetector())->setPattern('/' . static::$prefixPattern . 'This server is running ' . static::$logIdentifier . '/')
        ]);
    }

    /**
     * Get the name of the used server software
     *
     * @return string
     */
    public function getServerSoftware(): string
    {
        return "CraftBukkit";
    }
}