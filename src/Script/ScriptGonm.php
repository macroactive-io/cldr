<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Masaram Gondi
 *
 * @psalm-immutable
 */
class ScriptGonm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gonm';
    }

    public function number(): string
    {
        return '313';
    }

    public function unicodeName(): string
    {
        return 'Masaram_Gondi';
    }
}
