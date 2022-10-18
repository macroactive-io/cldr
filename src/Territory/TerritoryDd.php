<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DD - German Democratic Republic.
 * @psalm-immutable
 */
class TerritoryDd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DD';
    }
}
