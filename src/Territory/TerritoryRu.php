<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RU - Russian Federation.
 * @psalm-immutable
 */
class TerritoryRu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RU';
    }
}
