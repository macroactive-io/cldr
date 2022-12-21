<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Cabo Verde';
    }

    public function code(): string
    {
        return 'CV';
    }
}
