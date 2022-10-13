<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BS - Bahamas.
 */
class TerritoryBs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BS';
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
