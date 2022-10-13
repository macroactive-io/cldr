<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GR - Greece.
 */
class TerritoryGr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GR';
    }
}
