<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory021 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Northern America';
    }

    public function code(): string
    {
        return '021';
    }
}
