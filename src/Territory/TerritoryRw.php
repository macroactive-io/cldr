<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryRw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Rwanda';
    }

    public function code(): string
    {
        return 'RW';
    }
}
