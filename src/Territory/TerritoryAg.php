<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AG - Antigua and Barbuda
 *
 * @psalm-immutable
 */
class TerritoryAg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
