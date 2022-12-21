<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAq extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Antarctica';
    }

    public function code(): string
    {
        return 'AQ';
    }
}
