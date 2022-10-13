<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FR - France.
 */
class TerritoryFr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'FR';
    }
}
