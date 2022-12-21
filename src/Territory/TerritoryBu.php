<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Burma';
    }

    public function code(): string
    {
        return 'BU';
    }
}
