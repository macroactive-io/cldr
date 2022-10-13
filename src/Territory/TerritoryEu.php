<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EU - European Union.
 */
class TerritoryEu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EU';
    }
}
