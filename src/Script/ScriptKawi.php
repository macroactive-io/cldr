<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Kawi
 *
 * @psalm-immutable
 */
class ScriptKawi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kawi';
    }

    public function number(): string
    {
        return '368';
    }
}
