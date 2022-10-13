<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HN - Honduras.
 */
class TerritoryHn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'HN';
    }

    public function firstDay()
    {
        return 0;
    }
}
