<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Czechia';
    }

    public function code(): string
    {
        return 'CZ';
    }
}
