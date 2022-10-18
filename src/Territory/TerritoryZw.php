<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ZW - Zimbabwe
 *
 * @psalm-immutable
 */
class TerritoryZw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ZW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
