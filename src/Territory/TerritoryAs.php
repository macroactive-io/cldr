<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AS - American Samoa.
 */
class TerritoryAs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AS';
    }

    public function firstDay()
    {
        return 0;
    }
}
