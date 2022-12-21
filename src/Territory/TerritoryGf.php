<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'French Guiana';
    }

    public function code(): string
    {
        return 'GF';
    }
}
