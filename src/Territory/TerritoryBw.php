<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BW - Botswana.
 */
class TerritoryBw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BW';
    }

    public function firstDay()
    {
        return 0;
    }
}
