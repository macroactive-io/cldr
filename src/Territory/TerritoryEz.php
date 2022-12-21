<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Eurozone';
    }

    public function code(): string
    {
        return 'EZ';
    }
}
