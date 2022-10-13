<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ET - Ethiopia.
 */
class TerritoryEt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ET';
    }

    public function firstDay()
    {
        return 0;
    }
}
