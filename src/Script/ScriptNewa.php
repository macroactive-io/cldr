<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNewa - Representation of the Newa script.
 */
class ScriptNewa extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Newa';
    }

    public function number()
    {
        return '333';
    }

    public function unicodeName()
    {
        return 'Newa';
    }
}
