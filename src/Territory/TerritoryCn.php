<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CN - China.
 */
class TerritoryCn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CN';
    }

    public function firstDay()
    {
        return 0;
    }
}
