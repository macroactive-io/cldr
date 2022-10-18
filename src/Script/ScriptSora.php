<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Sora Sompeng
 *
 * @psalm-immutable
 */
class ScriptSora extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sora';
    }

    public function numerals(): array
    {
        return ['𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'];
    }

    public function number(): string
    {
        return '398';
    }

    public function unicodeName(): string
    {
        return 'Sora_Sompeng';
    }
}
