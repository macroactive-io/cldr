<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Northern Mariana Islands';
    }

    public function code(): string
    {
        return 'MP';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
