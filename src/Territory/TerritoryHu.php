<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * HU - Hungary
 *
 * @psalm-immutable
 */
class TerritoryHu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HU';
    }
}
