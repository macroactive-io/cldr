<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TW - Taiwan, Province of China.
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
