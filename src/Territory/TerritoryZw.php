<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ZW - Zimbabwe.
 */
class TerritoryZw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ZW';
    }

    public function firstDay()
    {
        return 0;
    }
}
