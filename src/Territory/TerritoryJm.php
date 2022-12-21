<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryJm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Jamaica';
    }

    public function code(): string
    {
        return 'JM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
