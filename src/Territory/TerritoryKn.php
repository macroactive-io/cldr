<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Kitts and Nevis';
    }

    public function code(): string
    {
        return 'KN';
    }
}
