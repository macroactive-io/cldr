<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Poland';
    }

    public function code(): string
    {
        return 'PL';
    }
}
