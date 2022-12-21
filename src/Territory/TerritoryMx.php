<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMx extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mexico';
    }

    public function code(): string
    {
        return 'MX';
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
