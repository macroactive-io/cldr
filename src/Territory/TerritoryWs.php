<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory WS - Samoa.
 */
class TerritoryWs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'WS';
    }

    public function firstDay()
    {
        return 0;
    }
}
