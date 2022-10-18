<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MT - Malta
 *
 * @psalm-immutable
 */
class TerritoryMt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
