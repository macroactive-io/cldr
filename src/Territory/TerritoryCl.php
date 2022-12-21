<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Chile';
    }

    public function code(): string
    {
        return 'CL';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
