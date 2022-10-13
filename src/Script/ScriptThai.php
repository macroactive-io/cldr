<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptThai - Representation of the Thai script.
 */
class ScriptThai extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Thai';
    }

    public function numerals()
    {
        return ['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'];
    }

    public function number()
    {
        return '352';
    }

    public function unicodeName()
    {
        return 'Thai';
    }
}
