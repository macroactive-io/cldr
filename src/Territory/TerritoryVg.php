<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VG - British Virgin Islands
 *
 * @psalm-immutable
 */
class TerritoryVg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VG';
    }
}
