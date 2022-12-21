<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Vincent and the Grenadines';
    }

    public function code(): string
    {
        return 'VC';
    }
}
