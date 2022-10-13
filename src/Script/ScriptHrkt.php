<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHrkt - Representation of the Japanese syllabaries (alias for Hiragana + Katakana) script.
 */
class ScriptHrkt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hrkt';
    }

    public function number()
    {
        return '412';
    }

    public function unicodeName()
    {
        return 'Katakana_Or_Hiragana';
    }
}
