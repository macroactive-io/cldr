<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KR - Republic of Korea.
 */
class TerritoryKr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KR';
    }

    public function firstDay()
    {
        return 0;
    }
}
