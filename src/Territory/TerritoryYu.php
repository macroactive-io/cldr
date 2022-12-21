<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryYu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Yugoslavia';
    }

    public function code(): string
    {
        return 'YU';
    }
}
