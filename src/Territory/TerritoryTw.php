<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TW - Taiwan, Province of China.
 */
class TerritoryTw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'TW';
    }

    public function firstDay()
    {
        return 0;
    }
}
