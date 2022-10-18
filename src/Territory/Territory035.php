<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 035 - South-Eastern Asia.
 * @psalm-immutable
 */
class Territory035 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '035';
    }
}
