<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 155 - Western Europe.
 * @psalm-immutable
 */
class Territory155 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '155';
    }
}
