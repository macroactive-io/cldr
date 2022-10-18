<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SS - South Sudan.
 * @psalm-immutable
 */
class TerritorySs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SS';
    }
}
