<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Peru';
    }

    public function code(): string
    {
        return 'PE';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
