<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CU - Cuba.
 * @psalm-immutable
 */
class TerritoryCu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CU';
    }
}
