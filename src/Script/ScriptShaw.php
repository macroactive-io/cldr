<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShaw - Representation of the Shavian (Shaw) script.
 */
class ScriptShaw extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Shaw';
    }

    public function number()
    {
        return '281';
    }

    public function unicodeName()
    {
        return 'Shavian';
    }
}
