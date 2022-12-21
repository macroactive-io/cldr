<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'European Union';
    }

    public function code(): string
    {
        return 'EU';
    }
}
