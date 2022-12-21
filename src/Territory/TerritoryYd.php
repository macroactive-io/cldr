<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryYd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Democratic Yemen';
    }

    public function code(): string
    {
        return 'YD';
    }
}
