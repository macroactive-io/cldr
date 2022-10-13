<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GU - Guam.
 */
class TerritoryGu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GU';
    }

    public function firstDay()
    {
        return 0;
    }
}
