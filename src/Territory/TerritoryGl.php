<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Greenland';
    }

    public function code(): string
    {
        return 'GL';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
