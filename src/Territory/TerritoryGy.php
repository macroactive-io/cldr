<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Guyana';
    }

    public function code(): string
    {
        return 'GY';
    }
}
