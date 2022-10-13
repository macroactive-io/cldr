<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MF - Saint Martin (French part).
 * @psalm-immutable
 */
class TerritoryMf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MF';
    }
}
