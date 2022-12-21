<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Costa Rica';
    }

    public function code(): string
    {
        return 'CR';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
