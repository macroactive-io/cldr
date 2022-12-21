<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sao Tome and Principe';
    }

    public function code(): string
    {
        return 'ST';
    }
}
