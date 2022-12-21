<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Kyrgyzstan';
    }

    public function code(): string
    {
        return 'KG';
    }
}
