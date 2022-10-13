<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KH - Cambodia.
 */
class TerritoryKh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KH';
    }

    public function firstDay()
    {
        return 0;
    }
}
