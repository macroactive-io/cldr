<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Ecuador';
    }

    public function code(): string
    {
        return 'EC';
    }
}
