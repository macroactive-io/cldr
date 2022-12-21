<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Somalia';
    }

    public function code(): string
    {
        return 'SO';
    }

    public function firstDay(): int
    {
        return 6;
    }
}
