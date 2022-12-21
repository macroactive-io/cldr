<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tanzania';
    }

    public function code(): string
    {
        return 'TZ';
    }
}
