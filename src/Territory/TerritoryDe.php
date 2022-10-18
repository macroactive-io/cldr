<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DE - Germany.
 * @psalm-immutable
 */
class TerritoryDe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DE';
    }
}
