<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bermuda';
    }

    public function code(): string
    {
        return 'BM';
    }
}
