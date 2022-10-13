<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGeor - Representation of the Georgian script.
 */
class ScriptGeor extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Geor';
    }

    public function number()
    {
        return '240';
    }

    public function unicodeName()
    {
        return 'Georgian';
    }
}
