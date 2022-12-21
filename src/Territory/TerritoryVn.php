<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Viet Nam';
    }

    public function code(): string
    {
        return 'VN';
    }
}
