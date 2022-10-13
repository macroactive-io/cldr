<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BR - Brazil.
 * @psalm-immutable
 */
class TerritoryBr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BR';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
