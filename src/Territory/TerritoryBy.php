<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BY - Belarus
 *
 * @psalm-immutable
 */
class TerritoryBy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BY';
    }
}
