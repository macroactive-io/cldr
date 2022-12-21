<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Taiwan, Province of China';
    }

    public function code(): string
    {
        return 'TW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
