<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SA - Saudi Arabia.
 */
class TerritorySa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SA';
    }

    public function firstDay()
    {
        return 0;
    }

    public function weekendStart()
    {
        return 5;
    }

    public function weekendEnd()
    {
        return 6;
    }
}
