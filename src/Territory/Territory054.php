<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 054 - Melanesia.
 * @psalm-immutable
 */
class Territory054 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '054';
    }
}
