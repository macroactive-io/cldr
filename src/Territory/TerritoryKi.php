<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Kiribati';
    }

    public function code(): string
    {
        return 'KI';
    }
}
