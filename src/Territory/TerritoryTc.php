<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Turks and Caicos Islands';
    }

    public function code(): string
    {
        return 'TC';
    }
}
