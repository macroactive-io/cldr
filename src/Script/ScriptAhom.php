<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAhom - Representation of the Ahom script.
 */
class ScriptAhom extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ahom';
    }

    public function number()
    {
        return '338';
    }

    public function unicodeName()
    {
        return 'Ahom';
    }
}
