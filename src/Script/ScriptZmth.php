<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptZmth - Representation of the Mathematical notation script.
 * @psalm-immutable
 */
class ScriptZmth extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zmth';
    }

    public function number(): string
    {
        return '995';
    }
}
