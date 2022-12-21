<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bolivia (Plurinational State of)';
    }

    public function code(): string
    {
        return 'BO';
    }
}
