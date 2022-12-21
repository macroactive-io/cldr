<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Gibraltar';
    }

    public function code(): string
    {
        return 'GI';
    }
}
