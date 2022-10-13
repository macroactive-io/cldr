<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SH - Saint Helena, Ascension and Tristan da Cunha.
 * @psalm-immutable
 */
class TerritorySh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SH';
    }
}
