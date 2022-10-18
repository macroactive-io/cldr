<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Mro, Mru
 *
 * @psalm-immutable
 */
class ScriptMroo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mroo';
    }

    public function number(): string
    {
        return '264';
    }

    public function unicodeName(): string
    {
        return 'Mro';
    }
}
