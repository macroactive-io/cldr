<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BV - Bouvet Island
 *
 * @psalm-immutable
 */
class TerritoryBv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BV';
    }
}
