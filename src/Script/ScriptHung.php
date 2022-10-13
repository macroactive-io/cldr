<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHung - Representation of the Old Hungarian (Hungarian Runic) script.
 */
class ScriptHung extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hung';
    }

    public function number()
    {
        return '176';
    }

    public function unicodeName()
    {
        return 'Old_Hungarian';
    }
}
