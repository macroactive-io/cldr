<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GT - Guatemala
 *
 * @psalm-immutable
 */
class TerritoryGt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GT';
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
