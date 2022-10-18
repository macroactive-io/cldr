<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Osage
 *
 * @psalm-immutable
 */
class ScriptOsge extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Osge';
    }

    public function number(): string
    {
        return '219';
    }

    public function unicodeName(): string
    {
        return 'Osage';
    }
}
