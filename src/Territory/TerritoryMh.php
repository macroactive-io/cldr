<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MH - Marshall Islands.
 */
class TerritoryMh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MH';
    }

    public function firstDay()
    {
        return 0;
    }
}
