<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOsge - Representation of the Osage script.
 */
class ScriptOsge extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Osge';
    }

    public function number()
    {
        return '219';
    }

    public function unicodeName()
    {
        return 'Osage';
    }
}
