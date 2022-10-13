<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HK - Hong Kong.
 */
class TerritoryHk extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'HK';
    }

    public function firstDay()
    {
        return 0;
    }
}
