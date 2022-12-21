<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Antigua and Barbuda';
    }

    public function code(): string
    {
        return 'AG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
