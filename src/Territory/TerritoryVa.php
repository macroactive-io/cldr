<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Holy See';
    }

    public function code(): string
    {
        return 'VA';
    }
}
