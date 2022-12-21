<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tonga';
    }

    public function code(): string
    {
        return 'TO';
    }
}
