<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTaml - Representation of the Tamil script.
 */
class ScriptTaml extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Taml';
    }

    public function numerals()
    {
        return ['௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'];
    }

    public function number()
    {
        return '346';
    }

    public function unicodeName()
    {
        return 'Tamil';
    }
}
