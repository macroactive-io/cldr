<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * UM - United States Minor Outlying Islands
 *
 * @psalm-immutable
 */
class TerritoryUm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
