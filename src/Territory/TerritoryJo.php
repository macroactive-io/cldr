<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JO - Jordan.
 * @psalm-immutable
 */
class TerritoryJo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'JO';
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
