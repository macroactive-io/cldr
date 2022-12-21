<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Azerbaijan';
    }

    public function code(): string
    {
        return 'AZ';
    }
}
