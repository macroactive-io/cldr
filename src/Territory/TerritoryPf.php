<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PF - French Polynesia.
 * @psalm-immutable
 */
class TerritoryPf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PF';
    }
}
