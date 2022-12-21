<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Côte d\'Ivoire';
    }

    public function code(): string
    {
        return 'CI';
    }
}
