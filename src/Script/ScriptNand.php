<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNand - Representation of the Nandinagari script.
 */
class ScriptNand extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nand';
    }

    public function number()
    {
        return '311';
    }

    public function unicodeName()
    {
        return 'Nandinagari';
    }
}
