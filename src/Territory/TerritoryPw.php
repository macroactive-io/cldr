<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Palau';
    }

    public function code(): string
    {
        return 'PW';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
