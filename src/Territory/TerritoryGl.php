<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GL - Greenland.
 */
class TerritoryGl extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GL';
    }

    public function firstDay()
    {
        return 0;
    }
}
