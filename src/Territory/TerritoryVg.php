<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Virgin Islands (British)';
    }

    public function code(): string
    {
        return 'VG';
    }
}
