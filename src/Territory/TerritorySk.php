<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SK - Slovakia.
 * @psalm-immutable
 */
class TerritorySk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SK';
    }
}
