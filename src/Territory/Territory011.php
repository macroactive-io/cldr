<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory011 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Western Africa';
    }

    public function code(): string
    {
        return '011';
    }
}
