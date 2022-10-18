<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cirth
 *
 * @psalm-immutable
 */
class ScriptCirt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cirt';
    }

    public function number(): string
    {
        return '291';
    }
}
