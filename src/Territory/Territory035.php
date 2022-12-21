<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory035 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'South-Eastern Asia';
    }

    public function code(): string
    {
        return '035';
    }
}
