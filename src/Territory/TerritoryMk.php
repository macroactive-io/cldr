<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'North Macedonia';
    }

    public function code(): string
    {
        return 'MK';
    }
}
