<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 017 - Middle Africa.
 * @psalm-immutable
 */
class Territory017 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '017';
    }
}
