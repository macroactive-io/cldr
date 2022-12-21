<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Chad';
    }

    public function code(): string
    {
        return 'TD';
    }
}
