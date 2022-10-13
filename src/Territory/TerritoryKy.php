<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KY - Cayman Islands.
 */
class TerritoryKy extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KY';
    }

    public function measurementSystem()
    {
        return 'US';
    }
}
