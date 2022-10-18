<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Rongorongo
 *
 * @psalm-immutable
 */
class ScriptRoro extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Roro';
    }

    public function number(): string
    {
        return '620';
    }
}
