<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory030 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Eastern Asia';
    }

    public function code(): string
    {
        return '030';
    }
}
