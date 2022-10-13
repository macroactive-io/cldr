<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AQ - Antarctica.
 */
class TerritoryAq extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AQ';
    }
}
