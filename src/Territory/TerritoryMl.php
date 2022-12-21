<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mali';
    }

    public function code(): string
    {
        return 'ML';
    }
}
