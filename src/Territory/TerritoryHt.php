<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Haiti';
    }

    public function code(): string
    {
        return 'HT';
    }
}
