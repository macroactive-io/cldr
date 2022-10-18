<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 145 - Western Asia.
 * @psalm-immutable
 */
class Territory145 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '145';
    }
}
