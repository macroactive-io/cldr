<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Philippines';
    }

    public function code(): string
    {
        return 'PH';
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
