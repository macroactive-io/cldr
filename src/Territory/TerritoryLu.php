<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Luxembourg';
    }

    public function code(): string
    {
        return 'LU';
    }
}
