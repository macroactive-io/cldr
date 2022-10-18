<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * UY - Uruguay
 *
 * @psalm-immutable
 */
class TerritoryUy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UY';
    }
}
