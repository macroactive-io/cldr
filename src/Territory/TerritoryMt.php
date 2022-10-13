<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MT - Malta.
 */
class TerritoryMt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MT';
    }

    public function firstDay()
    {
        return 0;
    }
}
