<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TO - Tonga.
 * @psalm-immutable
 */
class TerritoryTo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TO';
    }
}
