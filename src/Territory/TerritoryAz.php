<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AZ - Azerbaijan.
 * @psalm-immutable
 */
class TerritoryAz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AZ';
    }
}
