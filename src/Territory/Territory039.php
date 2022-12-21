<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory039 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Southern Europe';
    }

    public function code(): string
    {
        return '039';
    }
}
