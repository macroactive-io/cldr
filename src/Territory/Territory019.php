<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 019 - Americas.
 * @psalm-immutable
 */
class Territory019 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '019';
    }
}
