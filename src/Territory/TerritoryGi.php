<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GI - Gibraltar.
 * @psalm-immutable
 */
class TerritoryGi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GI';
    }
}
