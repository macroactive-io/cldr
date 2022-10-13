<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSarb - Representation of the Old South Arabian script.
 */
class ScriptSarb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sarb';
    }

    public function number()
    {
        return '105';
    }

    public function unicodeName()
    {
        return 'Old_South_Arabian';
    }
}
