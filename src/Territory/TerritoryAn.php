<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Netherlands Antilles';
    }

    public function code(): string
    {
        return 'AN';
    }
}
