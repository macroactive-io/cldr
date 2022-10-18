<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 143 - Central Asia.
 * @psalm-immutable
 */
class Territory143 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '143';
    }
}
