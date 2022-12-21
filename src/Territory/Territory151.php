<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory151 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Eastern Europe';
    }

    public function code(): string
    {
        return '151';
    }
}
