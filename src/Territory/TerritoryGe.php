<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Georgia';
    }

    public function code(): string
    {
        return 'GE';
    }
}
