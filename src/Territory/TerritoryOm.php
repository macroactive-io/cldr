<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryOm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Oman';
    }

    public function code(): string
    {
        return 'OM';
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
