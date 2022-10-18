<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * HK - Hong Kong
 *
 * @psalm-immutable
 */
class TerritoryHk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HK';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
