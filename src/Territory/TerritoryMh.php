<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MH - Marshall Islands
 *
 * @psalm-immutable
 */
class TerritoryMh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
