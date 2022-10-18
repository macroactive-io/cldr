<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FJ - Fiji
 *
 * @psalm-immutable
 */
class TerritoryFj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FJ';
    }
}
