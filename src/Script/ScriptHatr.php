<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHatr - Representation of the Hatran script.
 */
class ScriptHatr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hatr';
    }

    public function number()
    {
        return '127';
    }

    public function unicodeName()
    {
        return 'Hatran';
    }
}
