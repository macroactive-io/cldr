<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GM - Gambia
 *
 * @psalm-immutable
 */
class TerritoryGm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GM';
    }
}
