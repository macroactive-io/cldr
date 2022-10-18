<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Ranjana
 *
 * @psalm-immutable
 */
class ScriptRanj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ranj';
    }

    public function number(): string
    {
        return '303';
    }
}
