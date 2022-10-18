<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NZ - New Zealand.
 * @psalm-immutable
 */
class TerritoryNz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NZ';
    }
}
