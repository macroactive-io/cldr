<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KZ - Kazakhstan.
 * @psalm-immutable
 */
class TerritoryKz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KZ';
    }
}
