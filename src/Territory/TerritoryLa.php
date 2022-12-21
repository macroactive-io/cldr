<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Lao People\'s Democratic Republic';
    }

    public function code(): string
    {
        return 'LA';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
