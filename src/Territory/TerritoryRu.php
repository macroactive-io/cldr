<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RU - Russian Federation.
 */
class TerritoryRu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'RU';
    }
}
