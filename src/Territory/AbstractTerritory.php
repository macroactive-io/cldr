<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of a geographic area.
 * @psalm-immutable
 */
abstract class AbstractTerritory implements TerritoryInterface
{
    public function firstDay(): int
    {
        return 1;
    }

    public function measurementSystem(): string
    {
        return 'metric';
    }

    public function paperSize(): string
    {
        return 'A4';
    }

    public function weekendStart(): int
    {
        return 6;
    }

    public function weekendEnd(): int
    {
        return 0;
    }
}
