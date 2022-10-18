<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Makasar
 *
 * @psalm-immutable
 */
class ScriptMaka extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Maka';
    }

    public function number(): string
    {
        return '366';
    }

    public function unicodeName(): string
    {
        return 'Makasar';
    }
}
