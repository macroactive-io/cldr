<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHano - Representation of the Hanunoo (Hanunóo) script.
 */
class ScriptHano extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hano';
    }

    public function number()
    {
        return '371';
    }

    public function unicodeName()
    {
        return 'Hanunoo';
    }
}
