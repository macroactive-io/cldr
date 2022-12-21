<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'French Southern Territories';
    }

    public function code(): string
    {
        return 'TF';
    }
}
