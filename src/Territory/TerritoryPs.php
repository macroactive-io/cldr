<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PS - State of Palestine.
 */
class TerritoryPs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PS';
    }
}
