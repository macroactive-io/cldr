<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMoon - Representation of the Moon (Moon code, Moon script, Moon type) script.
 * @psalm-immutable
 */
class ScriptMoon extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Moon';
    }

    public function number(): string
    {
        return '218';
    }
}
