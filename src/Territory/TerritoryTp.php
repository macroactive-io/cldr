<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TP - East Timor
 *
 * @psalm-immutable
 */
class TerritoryTp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TP';
    }
}
