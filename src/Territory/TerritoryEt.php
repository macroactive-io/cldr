<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ET - Ethiopia
 *
 * @psalm-immutable
 */
class TerritoryEt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ET';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
