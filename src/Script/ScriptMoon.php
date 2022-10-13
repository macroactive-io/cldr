<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMoon - Representation of the Moon (Moon code, Moon script, Moon type) script.
 */
class ScriptMoon extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Moon';
    }

    public function number()
    {
        return '218';
    }
}
