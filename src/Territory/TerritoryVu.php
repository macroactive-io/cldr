<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VU - Vanuatu.
 * @psalm-immutable
 */
class TerritoryVu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VU';
    }
}
