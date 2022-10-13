<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MP - Northern Mariana Islands.
 */
class TerritoryMp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MP';
    }

    public function firstDay()
    {
        return 0;
    }
}
