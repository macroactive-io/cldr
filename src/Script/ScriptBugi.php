<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Buginese
 *
 * @psalm-immutable
 */
class ScriptBugi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bugi';
    }

    public function number(): string
    {
        return '367';
    }

    public function unicodeName(): string
    {
        return 'Buginese';
    }
}
