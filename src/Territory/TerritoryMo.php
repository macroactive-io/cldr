<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Macao';
    }

    public function code(): string
    {
        return 'MO';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
