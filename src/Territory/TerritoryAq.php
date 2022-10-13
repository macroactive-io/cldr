<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AQ - Antarctica.
 * @psalm-immutable
 */
class TerritoryAq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AQ';
    }
}
