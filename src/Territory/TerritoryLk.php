<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sri Lanka';
    }

    public function code(): string
    {
        return 'LK';
    }
}
