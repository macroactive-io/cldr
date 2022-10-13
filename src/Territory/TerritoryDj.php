<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DJ - Djibouti.
 */
class TerritoryDj extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DJ';
    }

    public function firstDay()
    {
        return 6;
    }
}
