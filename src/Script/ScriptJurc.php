<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Jurchen
 *
 * @psalm-immutable
 */
class ScriptJurc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Jurc';
    }

    public function number(): string
    {
        return '510';
    }
}
