<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'French Polynesia';
    }

    public function code(): string
    {
        return 'PF';
    }
}
