<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AR - Argentina.
 */
class TerritoryAr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AR';
    }

    public function firstDay()
    {
        return 0;
    }
}
