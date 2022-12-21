<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Aruba';
    }

    public function code(): string
    {
        return 'AW';
    }
}
