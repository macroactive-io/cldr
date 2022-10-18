<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GY - Guyana
 *
 * @psalm-immutable
 */
class TerritoryGy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GY';
    }
}
