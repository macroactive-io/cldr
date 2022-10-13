<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlp - Representation of the Psalter Pahlavi script.
 */
class ScriptPhlp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phlp';
    }

    public function number()
    {
        return '132';
    }

    public function unicodeName()
    {
        return 'Psalter_Pahlavi';
    }
}
