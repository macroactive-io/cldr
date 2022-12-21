<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Andorra';
    }

    public function code(): string
    {
        return 'AD';
    }
}
