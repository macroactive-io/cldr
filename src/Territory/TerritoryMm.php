<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MM - Myanmar.
 */
class TerritoryMm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MM';
    }

    public function firstDay()
    {
        return 0;
    }

    public function measurementSystem()
    {
        return 'US';
    }
}
