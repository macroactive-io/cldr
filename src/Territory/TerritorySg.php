<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SG - Singapore.
 */
class TerritorySg extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SG';
    }

    public function firstDay()
    {
        return 0;
    }
}
