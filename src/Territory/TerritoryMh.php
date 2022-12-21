<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Marshall Islands';
    }

    public function code(): string
    {
        return 'MH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
