<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 151 - Eastern Europe.
 * @psalm-immutable
 */
class Territory151 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '151';
    }
}
