<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bosnia and Herzegovina';
    }

    public function code(): string
    {
        return 'BA';
    }
}
