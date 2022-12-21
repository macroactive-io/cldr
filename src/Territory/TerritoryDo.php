<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryDo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Dominican Republic';
    }

    public function code(): string
    {
        return 'DO';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
