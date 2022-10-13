<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SJ - Svalbard and Jan Mayen.
 */
class TerritorySj extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SJ';
    }
}
