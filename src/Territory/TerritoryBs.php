<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bahamas';
    }

    public function code(): string
    {
        return 'BS';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
