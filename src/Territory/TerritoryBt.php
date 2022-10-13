<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BT - Bhutan.
 */
class TerritoryBt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BT';
    }

    public function firstDay()
    {
        return 0;
    }
}
