<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SU - Union of Soviet Socialist Republics.
 */
class TerritorySu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SU';
    }
}
