<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BT - Bhutan
 *
 * @psalm-immutable
 */
class TerritoryBt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
