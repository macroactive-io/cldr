<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMlym - Representation of the Malayalam script.
 */
class ScriptMlym extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mlym';
    }

    public function numerals()
    {
        return ['൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯'];
    }

    public function number()
    {
        return '347';
    }

    public function unicodeName()
    {
        return 'Malayalam';
    }
}
