<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 002 - Africa.
 * @psalm-immutable
 */
class Territory002 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '002';
    }
}
