<?php

namespace Aternos\Codex\Minecraft\Log\CrashReport;

use Aternos\Codex\Log\LevelInterface;

enum CrashReportLevel: int implements \Aternos\Codex\Log\LevelInterface
{
    case WARNING = 4;
    case INFO = 6;
    case TITLE = 8;
    case COMMENT = 9;
    case STACKTRACE = 10;

    /**
     * @inheritDoc
     */
    public static function fromString(string $level): LevelInterface
    {
        return match (strtolower($level)) {
            "warning" => CrashReportLevel::WARNING,
            "title" => CrashReportLevel::TITLE,
            "comment" => CrashReportLevel::COMMENT,
            "stacktrace" => CrashReportLevel::STACKTRACE,
            default => CrashReportLevel::INFO
        };
    }

    /**
     * @inheritDoc
     */
    public function asString(): string
    {
        return match ($this) {
            CrashReportLevel::WARNING => "warning",
            CrashReportLevel::TITLE => "title",
            CrashReportLevel::COMMENT => "comment",
            CrashReportLevel::STACKTRACE => "stacktrace",
            CrashReportLevel::INFO => "info"
        };
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): int
    {
        return $this->value;
    }
}
