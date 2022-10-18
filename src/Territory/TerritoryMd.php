<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MD - Moldova
 *
 * @psalm-immutable
 */
class TerritoryMd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MD';
    }
}
