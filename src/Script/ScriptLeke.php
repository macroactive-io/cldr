<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Leke
 *
 * @psalm-immutable
 */
class ScriptLeke extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Leke';
    }

    public function number(): string
    {
        return '364';
    }
}
