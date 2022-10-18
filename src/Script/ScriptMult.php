<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 *  Multani
 *
 * @psalm-immutable
 */
class ScriptMult extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mult';
    }

    public function number(): string
    {
        return '323';
    }

    public function unicodeName(): string
    {
        return 'Multani';
    }
}
