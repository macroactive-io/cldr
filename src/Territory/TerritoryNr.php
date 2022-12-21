<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Nauru';
    }

    public function code(): string
    {
        return 'NR';
    }
}
