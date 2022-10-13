<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MW - Malawi.
 */
class TerritoryMw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MW';
    }

    public function firstDay()
    {
        return 0;
    }
}
