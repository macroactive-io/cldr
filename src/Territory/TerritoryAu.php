<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Australia';
    }

    public function code(): string
    {
        return 'AU';
    }
}
