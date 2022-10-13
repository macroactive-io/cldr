<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Cypro-Minoan script.
 */
class ScriptCpmn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cpmn';
    }

    public function number()
    {
        return '402';
    }

    public function unicodeName()
    {
        return 'Cypro_Minoan';
    }
}
