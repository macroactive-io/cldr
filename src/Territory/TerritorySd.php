<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SD - Sudan.
 */
class TerritorySd extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SD';
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
