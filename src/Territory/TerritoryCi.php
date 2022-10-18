<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CI - Côte d'Ivoire
 *
 * @psalm-immutable
 */
class TerritoryCi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CI';
    }
}
