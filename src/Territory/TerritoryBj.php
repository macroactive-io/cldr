<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BJ - Benin
 *
 * @psalm-immutable
 */
class TerritoryBj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BJ';
    }
}
