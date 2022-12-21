<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Croatia';
    }

    public function code(): string
    {
        return 'HR';
    }
}
