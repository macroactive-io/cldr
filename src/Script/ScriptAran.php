<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Arabic (Nastaliq)
 *
 * @psalm-immutable
 */
class ScriptAran extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Aran';
    }

    public function number(): string
    {
        return '161';
    }
}
