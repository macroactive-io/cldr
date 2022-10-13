<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EC - Ecuador.
 */
class TerritoryEc extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EC';
    }
}
