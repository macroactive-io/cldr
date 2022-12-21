<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Lucia';
    }

    public function code(): string
    {
        return 'LC';
    }
}
