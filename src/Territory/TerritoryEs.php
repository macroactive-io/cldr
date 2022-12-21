<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Spain';
    }

    public function code(): string
    {
        return 'ES';
    }
}
