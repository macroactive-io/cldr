<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Deseret (Mormon)
 *
 * @psalm-immutable
 */
class ScriptDsrt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dsrt';
    }

    public function number(): string
    {
        return '250';
    }

    public function unicodeName(): string
    {
        return 'Deseret';
    }
}
