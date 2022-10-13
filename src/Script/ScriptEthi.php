<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEthi - Representation of the Ethiopic script.
 */
class ScriptEthi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ethi';
    }

    public function number()
    {
        return '430';
    }

    public function unicodeName()
    {
        return 'Ethiopic';
    }
}
