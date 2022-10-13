<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHluw - Representation of the Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs) script.
 */
class ScriptHluw extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hluw';
    }

    public function number()
    {
        return '080';
    }

    public function unicodeName()
    {
        return 'Anatolian_Hieroglyphs';
    }
}
