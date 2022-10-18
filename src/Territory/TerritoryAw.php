<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AW - Aruba
 *
 * @psalm-immutable
 */
class TerritoryAw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AW';
    }
}
