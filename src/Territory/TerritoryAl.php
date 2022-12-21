<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Albania';
    }

    public function code(): string
    {
        return 'AL';
    }
}
