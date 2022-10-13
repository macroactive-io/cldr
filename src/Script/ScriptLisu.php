<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLisu - Representation of the Lisu (Fraser) script.
 */
class ScriptLisu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lisu';
    }

    public function number()
    {
        return '399';
    }

    public function unicodeName()
    {
        return 'Lisu';
    }
}
