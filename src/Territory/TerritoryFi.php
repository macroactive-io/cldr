<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryFi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Finland';
    }

    public function code(): string
    {
        return 'FI';
    }
}
