<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DO - Dominican Republic.
 */
class TerritoryDo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DO';
    }

    public function firstDay()
    {
        return 0;
    }
}
