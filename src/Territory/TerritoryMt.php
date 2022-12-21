<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Malta';
    }

    public function code(): string
    {
        return 'MT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
