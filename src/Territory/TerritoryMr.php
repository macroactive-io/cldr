<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mauritania';
    }

    public function code(): string
    {
        return 'MR';
    }
}
