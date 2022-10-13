<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VG - British Virgin Islands.
 * @psalm-immutable
 */
class TerritoryVg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VG';
    }
}
