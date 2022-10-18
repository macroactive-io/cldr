<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CY - Cyprus.
 * @psalm-immutable
 */
class TerritoryCy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CY';
    }
}
