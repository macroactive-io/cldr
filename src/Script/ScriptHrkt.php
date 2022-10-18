<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Japanese syllabaries (alias for Hiragana + Katakana)
 *
 * @psalm-immutable
 */
class ScriptHrkt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hrkt';
    }

    public function number(): string
    {
        return '412';
    }

    public function unicodeName(): string
    {
        return 'Katakana_Or_Hiragana';
    }
}
