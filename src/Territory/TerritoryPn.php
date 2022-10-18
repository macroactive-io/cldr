<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PN - Pitcairn.
 * @psalm-immutable
 */
class TerritoryPn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PN';
    }
}
