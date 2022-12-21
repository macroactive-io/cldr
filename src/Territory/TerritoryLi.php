<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Liechtenstein';
    }

    public function code(): string
    {
        return 'LI';
    }
}
