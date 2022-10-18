<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Symbols
 *
 * @psalm-immutable
 */
class ScriptZsym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zsym';
    }

    public function number(): string
    {
        return '996';
    }
}
