<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AI - Anguilla.
 * @psalm-immutable
 */
class TerritoryAi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AI';
    }
}
