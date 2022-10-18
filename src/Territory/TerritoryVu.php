<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

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
