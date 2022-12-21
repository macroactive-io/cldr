<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'El Salvador';
    }

    public function code(): string
    {
        return 'SV';
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
