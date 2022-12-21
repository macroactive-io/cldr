<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Heard Island and McDonald Islands';
    }

    public function code(): string
    {
        return 'HM';
    }
}
