<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PT - Portugal.
 */
class TerritoryPt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PT';
    }

    /**
     * @return int
     */
    public function firstDay()
    {
        return 0;
    }
}
