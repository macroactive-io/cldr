<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Guernsey';
    }

    public function code(): string
    {
        return 'GG';
    }
}
