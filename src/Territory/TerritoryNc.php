<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'New Caledonia';
    }

    public function code(): string
    {
        return 'NC';
    }
}
