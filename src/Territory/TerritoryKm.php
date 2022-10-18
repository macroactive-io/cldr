<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * KM - Comoros
 *
 * @psalm-immutable
 */
class TerritoryKm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KM';
    }
}
