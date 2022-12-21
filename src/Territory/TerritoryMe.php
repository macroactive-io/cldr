<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Montenegro';
    }

    public function code(): string
    {
        return 'ME';
    }
}
