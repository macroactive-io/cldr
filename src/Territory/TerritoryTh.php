<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Thailand';
    }

    public function code(): string
    {
        return 'TH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
