<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GP - Guadeloupe.
 * @psalm-immutable
 */
class TerritoryGp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GP';
    }
}
