<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Piqd
 *
 * @psalm-immutable
 */
class ScriptPiqd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Piqd';
    }

    public function number(): string
    {
        return '293';
    }
}
