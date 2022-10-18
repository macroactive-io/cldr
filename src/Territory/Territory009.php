<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 009 - Oceania.
 * @psalm-immutable
 */
class Territory009 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '009';
    }
}
