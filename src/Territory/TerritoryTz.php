<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TZ - United Republic of Tanzania.
 * @psalm-immutable
 */
class TerritoryTz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TZ';
    }
}
