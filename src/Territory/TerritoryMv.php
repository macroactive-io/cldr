<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MV - Maldives
 *
 * @psalm-immutable
 */
class TerritoryMv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MV';
    }

    public function firstDay(): int
    {
        return 5;
    }
}
