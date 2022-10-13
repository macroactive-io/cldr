<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IC - Canary Islands.
 */
class TerritoryIc extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'IC';
    }
}
