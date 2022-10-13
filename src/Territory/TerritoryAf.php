<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AF - Afghanistan.
 */
class TerritoryAf extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AF';
    }

    public function firstDay()
    {
        return 6;
    }

    public function weekendStart()
    {
        return 4;
    }

    public function weekendEnd()
    {
        return 5;
    }
}
