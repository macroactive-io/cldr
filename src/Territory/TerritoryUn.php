<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryUn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'United Nations';
    }

    public function code(): string
    {
        return 'UN';
    }
}
