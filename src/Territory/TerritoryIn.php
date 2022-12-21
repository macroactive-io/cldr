<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'India';
    }

    public function code(): string
    {
        return 'IN';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function weekendStart(): int
    {
        return 0;
    }

    public function weekendEnd(): int
    {
        return 1;
    }
}
