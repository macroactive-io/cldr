<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryId extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Indonesia';
    }

    public function code(): string
    {
        return 'ID';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
