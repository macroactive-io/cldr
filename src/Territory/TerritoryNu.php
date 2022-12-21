<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Niue';
    }

    public function code(): string
    {
        return 'NU';
    }
}
