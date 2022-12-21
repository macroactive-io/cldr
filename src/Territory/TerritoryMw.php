<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Malawi';
    }

    public function code(): string
    {
        return 'MW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
