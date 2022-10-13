<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GI - Gibraltar.
 */
class TerritoryGi extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GI';
    }
}
