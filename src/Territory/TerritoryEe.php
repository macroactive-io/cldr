<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Estonia';
    }

    public function code(): string
    {
        return 'EE';
    }
}
