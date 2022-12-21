<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryZw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Zimbabwe';
    }

    public function code(): string
    {
        return 'ZW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
