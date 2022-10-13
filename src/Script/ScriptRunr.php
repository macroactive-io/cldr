<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRunr - Representation of the Runic script.
 */
class ScriptRunr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Runr';
    }

    public function number()
    {
        return '211';
    }

    public function unicodeName()
    {
        return 'Runic';
    }
}
