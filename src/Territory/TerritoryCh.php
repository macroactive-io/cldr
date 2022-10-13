<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CH - Switzerland.
 */
class TerritoryCh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CH';
    }
}
