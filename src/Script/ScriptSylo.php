<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSylo - Representation of the Syloti Nagri script.
 */
class ScriptSylo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sylo';
    }

    public function number()
    {
        return '316';
    }

    public function unicodeName()
    {
        return 'Syloti_Nagri';
    }
}
