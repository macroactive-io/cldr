<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Brunei Darussalam';
    }

    public function code(): string
    {
        return 'BN';
    }
}
