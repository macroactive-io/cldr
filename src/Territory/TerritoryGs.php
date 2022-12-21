<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'South Georgia and the South Sandwich Islands';
    }

    public function code(): string
    {
        return 'GS';
    }
}
