<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MW - Malawi
 *
 * @psalm-immutable
 */
class TerritoryMw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
