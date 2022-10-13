<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NZ - New Zealand.
 */
class TerritoryNz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'NZ';
    }
}
