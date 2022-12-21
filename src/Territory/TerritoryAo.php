<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Angola';
    }

    public function code(): string
    {
        return 'AO';
    }
}
