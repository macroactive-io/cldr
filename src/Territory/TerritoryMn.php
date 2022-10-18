<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MN - Mongolia
 *
 * @psalm-immutable
 */
class TerritoryMn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MN';
    }
}
