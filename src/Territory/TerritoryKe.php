<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * KE - Kenya
 *
 * @psalm-immutable
 */
class TerritoryKe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KE';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
