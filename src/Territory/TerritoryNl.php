<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NL - Netherlands
 *
 * @psalm-immutable
 */
class TerritoryNl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NL';
    }
}
