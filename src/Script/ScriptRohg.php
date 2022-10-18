<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Hanifi Rohingya
 *
 * @psalm-immutable
 */
class ScriptRohg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Rohg';
    }

    public function number(): string
    {
        return '167';
    }

    public function unicodeName(): string
    {
        return 'Hanifi_Rohingya';
    }
}
