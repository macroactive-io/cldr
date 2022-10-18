<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 015 - Northern Africa.
 * @psalm-immutable
 */
class Territory015 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '015';
    }
}
