<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Ethiopia';
    }

    public function code(): string
    {
        return 'ET';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
