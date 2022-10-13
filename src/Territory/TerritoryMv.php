<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MV - Maldives.
 */
class TerritoryMv extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MV';
    }

    public function firstDay()
    {
        return 5;
    }
}
