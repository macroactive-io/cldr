<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VN - Viet Nam.
 */
class TerritoryVn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'VN';
    }
}
