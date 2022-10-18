<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SR - Suriname.
 * @psalm-immutable
 */
class TerritorySr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SR';
    }
}
