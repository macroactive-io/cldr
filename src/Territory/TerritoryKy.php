<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KY - Cayman Islands.
 * @psalm-immutable
 */
class TerritoryKy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KY';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
