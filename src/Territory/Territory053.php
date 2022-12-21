<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory053 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Australia and New Zealand';
    }

    public function code(): string
    {
        return '053';
    }
}
