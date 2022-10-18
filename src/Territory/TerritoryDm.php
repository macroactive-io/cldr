<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DM - Dominica.
 * @psalm-immutable
 */
class TerritoryDm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
