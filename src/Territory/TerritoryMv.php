<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Maldives';
    }

    public function code(): string
    {
        return 'MV';
    }

    public function firstDay(): int
    {
        return 5;
    }
}
