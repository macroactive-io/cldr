<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'American Samoa';
    }

    public function code(): string
    {
        return 'AS';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
