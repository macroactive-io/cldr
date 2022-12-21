<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Korea, Republic of';
    }

    public function code(): string
    {
        return 'KR';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
