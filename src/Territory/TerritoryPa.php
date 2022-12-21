<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Panama';
    }

    public function code(): string
    {
        return 'PA';
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
