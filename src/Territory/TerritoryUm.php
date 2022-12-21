<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryUm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'United States Minor Outlying Islands';
    }

    public function code(): string
    {
        return 'UM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
