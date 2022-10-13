<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PW - Palau.
 */
class TerritoryPw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PW';
    }

    public function measurementSystem()
    {
        return 'US';
    }
}
