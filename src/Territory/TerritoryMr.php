<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MR - Mauritania
 *
 * @psalm-immutable
 */
class TerritoryMr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MR';
    }
}
