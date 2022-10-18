<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FI - Finland
 *
 * @psalm-immutable
 */
class TerritoryFi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FI';
    }
}
