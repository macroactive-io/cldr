<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NP - Nepal
 *
 * @psalm-immutable
 */
class TerritoryNp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NP';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
