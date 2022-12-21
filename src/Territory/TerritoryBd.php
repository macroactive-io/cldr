<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bangladesh';
    }

    public function code(): string
    {
        return 'BD';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
