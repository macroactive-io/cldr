<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryFj extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Fiji';
    }

    public function code(): string
    {
        return 'FJ';
    }
}
