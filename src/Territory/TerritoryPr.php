<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Puerto Rico';
    }

    public function code(): string
    {
        return 'PR';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'US';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
