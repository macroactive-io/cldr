<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SO - Somalia.
 */
class TerritorySo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SO';
    }

    public function firstDay()
    {
        return 6;
    }
}
