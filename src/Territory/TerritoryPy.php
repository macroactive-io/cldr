<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Paraguay';
    }

    public function code(): string
    {
        return 'PY';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
