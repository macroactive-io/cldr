<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Burkina Faso';
    }

    public function code(): string
    {
        return 'BF';
    }
}
