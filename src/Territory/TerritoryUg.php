<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * UG - Uganda
 *
 * @psalm-immutable
 */
class TerritoryUg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UG';
    }
}
