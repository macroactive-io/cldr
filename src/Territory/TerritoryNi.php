<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NI - Nicaragua
 *
 * @psalm-immutable
 */
class TerritoryNi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NI';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
