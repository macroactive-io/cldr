<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MZ - Mozambique.
 */
class TerritoryMz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MZ';
    }

    public function firstDay()
    {
        return 0;
    }
}
