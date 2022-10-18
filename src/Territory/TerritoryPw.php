<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PW - Palau.
 * @psalm-immutable
 */
class TerritoryPw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PW';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
