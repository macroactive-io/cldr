<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ST - Sao Tome and Principe.
 * @psalm-immutable
 */
class TerritorySt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ST';
    }
}
