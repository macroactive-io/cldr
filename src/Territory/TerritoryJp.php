<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JP - Japan.
 */
class TerritoryJp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'JP';
    }

    public function firstDay()
    {
        return 0;
    }
}
