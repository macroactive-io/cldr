<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VN - Viet Nam
 *
 * @psalm-immutable
 */
class TerritoryVn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VN';
    }
}
