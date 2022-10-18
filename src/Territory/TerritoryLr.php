<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LR - Liberia.
 * @psalm-immutable
 */
class TerritoryLr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LR';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
