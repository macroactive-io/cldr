<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * UZ - Uzbekistan
 *
 * @psalm-immutable
 */
class TerritoryUz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UZ';
    }
}
