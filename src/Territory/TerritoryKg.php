<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KG - Kyrgyzstan.
 * @psalm-immutable
 */
class TerritoryKg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KG';
    }
}
