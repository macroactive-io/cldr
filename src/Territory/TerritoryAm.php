<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AM - Armenia
 *
 * @psalm-immutable
 */
class TerritoryAm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AM';
    }
}
