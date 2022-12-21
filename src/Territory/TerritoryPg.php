<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Papua New Guinea';
    }

    public function code(): string
    {
        return 'PG';
    }
}
