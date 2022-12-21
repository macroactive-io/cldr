<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Grenada';
    }

    public function code(): string
    {
        return 'GD';
    }
}
