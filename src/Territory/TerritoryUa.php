<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UA - Ukraine.
 */
class TerritoryUa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'UA';
    }
}
