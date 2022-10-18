<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SH - Saint Helena, Ascension and Tristan da Cunha
 *
 * @psalm-immutable
 */
class TerritorySh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SH';
    }
}
