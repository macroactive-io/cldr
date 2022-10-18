<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * UA - Ukraine
 *
 * @psalm-immutable
 */
class TerritoryUa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UA';
    }
}
