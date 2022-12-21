<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tokelau';
    }

    public function code(): string
    {
        return 'TK';
    }
}
