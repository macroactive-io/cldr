<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Elymaic
 *
 * @psalm-immutable
 */
class ScriptElym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Elym';
    }

    public function number(): string
    {
        return '128';
    }

    public function unicodeName(): string
    {
        return 'Elymaic';
    }
}
