<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Kenya';
    }

    public function code(): string
    {
        return 'KE';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
