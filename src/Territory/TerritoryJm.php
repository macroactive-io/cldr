<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JM - Jamaica.
 * @psalm-immutable
 */
class TerritoryJm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'JM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
