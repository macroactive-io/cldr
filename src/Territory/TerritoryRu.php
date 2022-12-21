<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryRu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Russian Federation';
    }

    public function code(): string
    {
        return 'RU';
    }
}
