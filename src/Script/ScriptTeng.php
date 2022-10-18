<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tengwar
 *
 * @psalm-immutable
 */
class ScriptTeng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Teng';
    }

    public function number(): string
    {
        return '290';
    }
}
