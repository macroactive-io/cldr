<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AQ - Antarctica
 *
 * @psalm-immutable
 */
class TerritoryAq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AQ';
    }
}
