<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TJ - Tajikistan
 *
 * @psalm-immutable
 */
class TerritoryTj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TJ';
    }
}
