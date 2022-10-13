<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KZ - Kazakhstan.
 */
class TerritoryKz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KZ';
    }
}
