<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * PL - Poland
 *
 * @psalm-immutable
 */
class TerritoryPl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PL';
    }
}
