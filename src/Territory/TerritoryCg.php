<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CG - Congo.
 * @psalm-immutable
 */
class TerritoryCg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CG';
    }
}
