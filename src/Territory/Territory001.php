<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory001 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'World';
    }

    public function code(): string
    {
        return '001';
    }
}
