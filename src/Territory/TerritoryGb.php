<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GB - United Kingdom.
 */
class TerritoryGb extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GB';
    }

    public function measurementSystem()
    {
        return 'UK';
    }
}
