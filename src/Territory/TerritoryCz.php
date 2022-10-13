<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CZ - Czech Republic.
 */
class TerritoryCz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CZ';
    }
}
