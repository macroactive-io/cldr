<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMerc - Representation of the Meroitic Cursive script.
 */
class ScriptMerc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Merc';
    }

    public function number()
    {
        return '101';
    }

    public function unicodeName()
    {
        return 'Meroitic_Cursive';
    }
}
