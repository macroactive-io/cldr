<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryJp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Japan';
    }

    public function code(): string
    {
        return 'JP';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
