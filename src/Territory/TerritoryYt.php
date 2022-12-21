<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryYt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mayotte';
    }

    public function code(): string
    {
        return 'YT';
    }
}
