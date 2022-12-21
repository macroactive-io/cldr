<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Virgin Islands (U.S.)';
    }

    public function code(): string
    {
        return 'VI';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
