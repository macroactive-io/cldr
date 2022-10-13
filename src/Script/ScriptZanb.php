<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Zanabazar Square script.
 */
class ScriptZanb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zanb';
    }

    public function number()
    {
        return '339';
    }

    public function unicodeName()
    {
        return 'Zanabazar_Square';
    }
}
