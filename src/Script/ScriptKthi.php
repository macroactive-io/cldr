<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKthi - Representation of the Kaithi script.
 */
class ScriptKthi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kthi';
    }

    public function number()
    {
        return '317';
    }

    public function unicodeName()
    {
        return 'Kaithi';
    }
}
