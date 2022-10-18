<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * DJ - Djibouti
 *
 * @psalm-immutable
 */
class TerritoryDj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DJ';
    }

    public function firstDay(): int
    {
        return 6;
    }
}
