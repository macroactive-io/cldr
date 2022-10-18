<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MY - Malaysia
 *
 * @psalm-immutable
 */
class TerritoryMy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MY';
    }
}
