<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Korea (Democratic People\'s Republic of)';
    }

    public function code(): string
    {
        return 'KP';
    }
}
