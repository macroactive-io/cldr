<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMend - Representation of the Mende Kikakui script.
 */
class ScriptMend extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mend';
    }

    public function number()
    {
        return '438';
    }

    public function unicodeName()
    {
        return 'Mende_Kikakui';
    }
}
