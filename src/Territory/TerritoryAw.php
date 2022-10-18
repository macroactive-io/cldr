<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AW - Aruba.
 * @psalm-immutable
 */
class TerritoryAw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AW';
    }
}
