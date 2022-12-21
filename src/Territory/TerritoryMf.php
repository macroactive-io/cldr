<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Martin (French part)';
    }

    public function code(): string
    {
        return 'MF';
    }
}
