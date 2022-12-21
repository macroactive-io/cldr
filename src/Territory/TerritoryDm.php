<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryDm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Dominica';
    }

    public function code(): string
    {
        return 'DM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
