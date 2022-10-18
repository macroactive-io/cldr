<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptJurc - Representation of the Jurchen script.
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
