<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDiak - Representation of the Diak script.
 */
class ScriptDiak extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Diak';
    }

    public function number()
    {
        return '342';
    }

    public function unicodeName()
    {
        return 'Dives_Akuru';
    }
}
