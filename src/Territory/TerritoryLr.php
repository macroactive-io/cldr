<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LR - Liberia.
 */
class TerritoryLr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'LR';
    }

    public function measurementSystem()
    {
        return 'US';
    }
}
