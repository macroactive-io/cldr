<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SY - Syrian Arab Republic.
 */
class TerritorySy extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SY';
    }

    public function firstDay()
    {
        return 6;
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
