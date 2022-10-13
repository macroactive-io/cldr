<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTirh - Representation of the Tirhuta script.
 */
class ScriptTirh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tirh';
    }

    public function number()
    {
        return '326';
    }

    public function unicodeName()
    {
        return 'Tirhuta';
    }
}
