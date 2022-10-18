<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ZR - Zaire
 *
 * @psalm-immutable
 */
class TerritoryZr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ZR';
    }
}
