<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRunr - Representation of the Hanifi Rohingya script.
 */
class ScriptRohg extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Rohg';
    }

    public function number()
    {
        return '167';
    }

    public function unicodeName()
    {
        return 'Hanifi_Rohingya';
    }
}
