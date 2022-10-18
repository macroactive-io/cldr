<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Moon (Moon code, Moon script, Moon type)
 *
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
