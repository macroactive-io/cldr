<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDsrt - Representation of the Deseret (Mormon) script.
 */
class ScriptDsrt extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Dsrt';
    }

    public function number()
    {
        return '250';
    }

    public function unicodeName()
    {
        return 'Deseret';
    }
}
