<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOrkh - Representation of the Old Turkic, Orkhon Runic script.
 */
class ScriptOrkh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Orkh';
    }

    public function number()
    {
        return '175';
    }

    public function unicodeName()
    {
        return 'Old_Turkic';
    }
}
