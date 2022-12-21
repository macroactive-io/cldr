<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryDe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Germany';
    }

    public function code(): string
    {
        return 'DE';
    }
}
