<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Linear A
 *
 * @psalm-immutable
 */
class ScriptLina extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lina';
    }

    public function number(): string
    {
        return '400';
    }

    public function unicodeName(): string
    {
        return 'Linear_A';
    }
}
