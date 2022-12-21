<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTj extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tajikistan';
    }

    public function code(): string
    {
        return 'TJ';
    }
}
