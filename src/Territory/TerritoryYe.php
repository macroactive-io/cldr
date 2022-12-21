<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryYe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Yemen';
    }

    public function code(): string
    {
        return 'YE';
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
