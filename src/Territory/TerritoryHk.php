<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Hong Kong';
    }

    public function code(): string
    {
        return 'HK';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
