<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TT - Trinidad and Tobago
 *
 * @psalm-immutable
 */
class TerritoryTt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
