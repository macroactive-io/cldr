<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Nicaragua';
    }

    public function code(): string
    {
        return 'NI';
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
