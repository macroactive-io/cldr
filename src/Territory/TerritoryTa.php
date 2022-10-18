<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TA - Tristan da Cunha.
 * @psalm-immutable
 */
class TerritoryTa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TA';
    }
}
