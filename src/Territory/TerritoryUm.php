<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UM - United States Minor Outlying Islands.
 */
class TerritoryUm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'UM';
    }

    public function firstDay()
    {
        return 0;
    }
}
