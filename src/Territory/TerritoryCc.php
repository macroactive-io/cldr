<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CC - Cocos (Keeling) Islands
 *
 * @psalm-immutable
 */
class TerritoryCc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CC';
    }
}
