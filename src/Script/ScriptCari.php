<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCari - Representation of the Carian script.
 */
class ScriptCari extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cari';
    }

    public function number()
    {
        return '201';
    }

    public function unicodeName()
    {
        return 'Carian';
    }
}
