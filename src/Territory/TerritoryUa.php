<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryUa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Ukraine';
    }

    public function code(): string
    {
        return 'UA';
    }
}
