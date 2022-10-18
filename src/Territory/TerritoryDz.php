<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * DZ - Algeria
 *
 * @psalm-immutable
 */
class TerritoryDz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DZ';
    }

    public function firstDay(): int
    {
        return 6;
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
