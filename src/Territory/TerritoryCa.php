<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Canada';
    }

    public function code(): string
    {
        return 'CA';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
