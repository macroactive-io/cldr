<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AO - Angola.
 * @psalm-immutable
 */
class TerritoryAo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AO';
    }
}
