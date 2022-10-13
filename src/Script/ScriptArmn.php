<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArmn - Representation of the Armenian script.
 */
class ScriptArmn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Armn';
    }

    public function number()
    {
        return '230';
    }

    public function unicodeName()
    {
        return 'Armenian';
    }
}
