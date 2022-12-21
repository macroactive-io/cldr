<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Botswana';
    }

    public function code(): string
    {
        return 'BW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
