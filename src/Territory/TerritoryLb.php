<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLb extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Lebanon';
    }

    public function code(): string
    {
        return 'LB';
    }
}
