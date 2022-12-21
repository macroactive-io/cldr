<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Hungary';
    }

    public function code(): string
    {
        return 'HU';
    }
}
