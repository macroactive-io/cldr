<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'East Timor';
    }

    public function code(): string
    {
        return 'TP';
    }
}
