<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Canary Islands';
    }

    public function code(): string
    {
        return 'IC';
    }
}
