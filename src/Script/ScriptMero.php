<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMero - Representation of the Meroitic Hieroglyphs script.
 */
class ScriptMero extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mero';
    }

    public function number()
    {
        return '100';
    }

    public function unicodeName()
    {
        return 'Meroitic_Hieroglyphs';
    }
}
