<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHebr - Representation of the Hebrew script.
 */
class ScriptHebr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hebr';
    }

    public function number()
    {
        return '125';
    }

    public function unicodeName()
    {
        return 'Hebrew';
    }
}
