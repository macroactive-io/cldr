<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhnx - Representation of the Phoenician script.
 */
class ScriptPhnx extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phnx';
    }

    public function number()
    {
        return '115';
    }

    public function unicodeName()
    {
        return 'Phoenician';
    }
}
