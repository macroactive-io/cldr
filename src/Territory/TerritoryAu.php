<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AU - Australia.
 */
class TerritoryAu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AU';
    }

    public function firstDay()
    {
        return 0;
    }
}
