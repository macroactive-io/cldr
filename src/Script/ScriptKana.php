<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Katakana
 *
 * @psalm-immutable
 */
class ScriptKana extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kana';
    }

    public function number(): string
    {
        return '411';
    }

    public function unicodeName(): string
    {
        return 'Katakana';
    }
}
