<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BG - Bulgaria.
 * @psalm-immutable
 */
class TerritoryBg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BG';
    }
}
