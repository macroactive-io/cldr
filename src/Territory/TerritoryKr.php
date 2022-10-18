<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * KR - Republic of Korea
 *
 * @psalm-immutable
 */
class TerritoryKr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KR';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
