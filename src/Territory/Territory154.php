<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory154 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Northern Europe';
    }

    public function code(): string
    {
        return '154';
    }
}
