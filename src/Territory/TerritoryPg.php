<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * PG - Papua New Guinea
 *
 * @psalm-immutable
 */
class TerritoryPg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PG';
    }
}
