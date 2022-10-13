<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BD - Bangladesh.
 * @psalm-immutable
 */
class TerritoryBd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BD';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
