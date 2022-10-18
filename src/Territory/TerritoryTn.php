<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TN - Tunisia.
 * @psalm-immutable
 */
class TerritoryTn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TN';
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
