<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 001 - World.
 * @psalm-immutable
 */
class Territory001 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '001';
    }
}
