<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory YD - Democratic Yemen.
 * @psalm-immutable
 */
class TerritoryYd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'YD';
    }
}
