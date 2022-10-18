<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LA - Lao People's Democratic Republic.
 * @psalm-immutable
 */
class TerritoryLa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LA';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
