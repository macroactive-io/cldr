<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 030 - Eastern Asia.
 * @psalm-immutable
 */
class Territory030 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '030';
    }
}
