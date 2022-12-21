<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryUy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Uruguay';
    }

    public function code(): string
    {
        return 'UY';
    }
}
