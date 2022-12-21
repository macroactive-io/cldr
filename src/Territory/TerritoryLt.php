<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Lithuania';
    }

    public function code(): string
    {
        return 'LT';
    }
}
