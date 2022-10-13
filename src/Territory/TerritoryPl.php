<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PL - Poland.
 */
class TerritoryPl extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PL';
    }
}
