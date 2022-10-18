<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GH - Ghana.
 * @psalm-immutable
 */
class TerritoryGh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GH';
    }
}
