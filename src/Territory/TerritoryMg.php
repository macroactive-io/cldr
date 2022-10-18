<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MG - Madagascar
 *
 * @psalm-immutable
 */
class TerritoryMg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MG';
    }
}
