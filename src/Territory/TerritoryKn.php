<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KN - Saint Kitts and Nevis.
 * @psalm-immutable
 */
class TerritoryKn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KN';
    }
}
