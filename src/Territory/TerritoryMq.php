<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMq extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Martinique';
    }

    public function code(): string
    {
        return 'MQ';
    }
}
