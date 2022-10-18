<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NA - Namibia
 *
 * @psalm-immutable
 */
class TerritoryNa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NA';
    }
}
