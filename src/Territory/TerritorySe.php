<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SE - Sweden
 *
 * @psalm-immutable
 */
class TerritorySe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SE';
    }
}
