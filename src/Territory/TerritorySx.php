<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SX - Sint Maarten (Dutch part)
 *
 * @psalm-immutable
 */
class TerritorySx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SX';
    }
}
