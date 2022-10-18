<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Latin (Gaelic variant)
 *
 * @psalm-immutable
 */
class ScriptLatg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latg';
    }

    public function number(): string
    {
        return '216';
    }
}
