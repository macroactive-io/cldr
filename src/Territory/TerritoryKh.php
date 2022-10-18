<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * KH - Cambodia
 *
 * @psalm-immutable
 */
class TerritoryKh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
