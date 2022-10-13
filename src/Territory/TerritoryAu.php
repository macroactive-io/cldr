<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AU - Australia.
 * @psalm-immutable
 */
class TerritoryAu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AU';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
