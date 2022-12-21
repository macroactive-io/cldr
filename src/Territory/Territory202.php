<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory202 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sub-Saharan Africa';
    }

    public function code(): string
    {
        return '202';
    }
}
