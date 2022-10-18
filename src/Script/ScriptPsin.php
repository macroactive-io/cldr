<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Proto-Sinaitic
 *
 * @psalm-immutable
 */
class ScriptPsin extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Psin';
    }

    public function number(): string
    {
        return '103';
    }
}
