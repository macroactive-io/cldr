<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryJe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Jersey';
    }

    public function code(): string
    {
        return 'JE';
    }
}
