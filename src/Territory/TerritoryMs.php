<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Montserrat';
    }

    public function code(): string
    {
        return 'MS';
    }
}
