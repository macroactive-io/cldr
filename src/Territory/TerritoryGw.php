<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Guinea-Bissau';
    }

    public function code(): string
    {
        return 'GW';
    }
}
