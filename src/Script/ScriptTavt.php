<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTavt - Representation of the Tai Viet script.
 */
class ScriptTavt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tavt';
    }

    public function number()
    {
        return '359';
    }

    public function unicodeName()
    {
        return 'Tai_Viet';
    }
}
