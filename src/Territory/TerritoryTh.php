<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TH - Thailand
 *
 * @psalm-immutable
 */
class TerritoryTh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
