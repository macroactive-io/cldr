<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MT - Malta.
 * @psalm-immutable
 */
class TerritoryMt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
