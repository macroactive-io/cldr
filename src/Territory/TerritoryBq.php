<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBq extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bonaire, Sint Eustatius and Saba';
    }

    public function code(): string
    {
        return 'BQ';
    }
}
