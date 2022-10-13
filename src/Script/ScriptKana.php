<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKana - Representation of the Katakana script.
 */
class ScriptKana extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kana';
    }

    public function number()
    {
        return '411';
    }

    public function unicodeName()
    {
        return 'Katakana';
    }
}
