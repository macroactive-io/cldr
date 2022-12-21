<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Norfolk Island';
    }

    public function code(): string
    {
        return 'NF';
    }
}
