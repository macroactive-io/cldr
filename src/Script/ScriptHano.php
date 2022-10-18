<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Hanunoo (Hanunóo)
 *
 * @psalm-immutable
 */
class ScriptHano extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hano';
    }

    public function number(): string
    {
        return '371';
    }

    public function unicodeName(): string
    {
        return 'Hanunoo';
    }
}
