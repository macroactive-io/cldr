<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mozambique';
    }

    public function code(): string
    {
        return 'MZ';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
