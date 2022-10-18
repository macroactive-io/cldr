<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * IT - Italy
 *
 * @psalm-immutable
 */
class TerritoryIt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IT';
    }
}
