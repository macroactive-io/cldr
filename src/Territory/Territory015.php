<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory015 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Northern Africa';
    }

    public function code(): string
    {
        return '015';
    }
}
