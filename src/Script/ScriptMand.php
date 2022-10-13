<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMand - Representation of the Mandaic, Mandaean script.
 */
class ScriptMand extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mand';
    }

    public function number()
    {
        return '140';
    }

    public function unicodeName()
    {
        return 'Mandaic';
    }
}
