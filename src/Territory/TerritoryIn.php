<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IN - India.
 */
class TerritoryIn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'IN';
    }

    public function firstDay()
    {
        return 0;
    }

    public function weekendStart()
    {
        return 0;
    }

    public function weekendEnd()
    {
        return 1;
    }
}
