<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Trinidad and Tobago';
    }

    public function code(): string
    {
        return 'TT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
