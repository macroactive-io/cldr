<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory005 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'South America';
    }

    public function code(): string
    {
        return '005';
    }
}
