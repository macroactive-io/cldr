<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Pierre and Miquelon';
    }

    public function code(): string
    {
        return 'PM';
    }
}
