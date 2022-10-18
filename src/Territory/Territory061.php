<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 061 - Polynesia.
 * @psalm-immutable
 */
class Territory061 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '061';
    }
}
