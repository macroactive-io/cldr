<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ZA - South Africa.
 * @psalm-immutable
 */
class TerritoryZa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ZA';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
