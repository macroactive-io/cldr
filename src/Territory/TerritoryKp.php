<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KP - Democratic People's Republic of Korea.
 * @psalm-immutable
 */
class TerritoryKp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KP';
    }
}
