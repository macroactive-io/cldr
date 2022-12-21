<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCc extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Cocos (Keeling) Islands';
    }

    public function code(): string
    {
        return 'CC';
    }
}
