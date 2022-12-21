<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGq extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Equatorial Guinea';
    }

    public function code(): string
    {
        return 'GQ';
    }
}
