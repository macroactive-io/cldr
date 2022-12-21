<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBb extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Barbados';
    }

    public function code(): string
    {
        return 'BB';
    }
}
