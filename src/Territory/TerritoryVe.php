<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryVe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Venezuela (Bolivarian Republic of)';
    }

    public function code(): string
    {
        return 'VE';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
