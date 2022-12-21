<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Niger';
    }

    public function code(): string
    {
        return 'NE';
    }
}
