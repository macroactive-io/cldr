<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAx extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Åland Islands';
    }

    public function code(): string
    {
        return 'AX';
    }
}
