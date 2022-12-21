<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Guinea';
    }

    public function code(): string
    {
        return 'GN';
    }
}
