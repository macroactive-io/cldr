<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SC - Seychelles.
 * @psalm-immutable
 */
class TerritorySc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SC';
    }
}
