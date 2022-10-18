<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 013 - Central America.
 * @psalm-immutable
 */
class Territory013 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '013';
    }
}
