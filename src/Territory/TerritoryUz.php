<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryUz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Uzbekistan';
    }

    public function code(): string
    {
        return 'UZ';
    }
}
