<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saudi Arabia';
    }

    public function code(): string
    {
        return 'SA';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function weekendStart(): int
    {
        return 5;
    }

    public function weekendEnd(): int
    {
        return 6;
    }
}
