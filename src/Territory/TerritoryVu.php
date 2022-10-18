<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VU - Vanuatu
 *
 * @psalm-immutable
 */
class TerritoryVu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VU';
    }
}
