<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Colombia';
    }

    public function code(): string
    {
        return 'CO';
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
