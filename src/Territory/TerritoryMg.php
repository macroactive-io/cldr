<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MG - Madagascar.
 * @psalm-immutable
 */
class TerritoryMg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MG';
    }
}
