<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Simplified Han
 *
 * @psalm-immutable
 */
class ScriptHans extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hans';
    }

    public function number(): string
    {
        return '501';
    }
}
