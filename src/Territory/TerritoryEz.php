<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EZ - Eurozone.
 */
class TerritoryEz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EZ';
    }
}
