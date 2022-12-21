<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Saint Helena, Ascension and Tristan da Cunha';
    }

    public function code(): string
    {
        return 'SH';
    }
}
