<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TW - Taiwan, Province of China
 *
 * @psalm-immutable
 */
class TerritoryTw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
