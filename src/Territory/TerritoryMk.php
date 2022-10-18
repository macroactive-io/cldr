<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MK - The Former Yugoslav Republic of Macedonia
 *
 * @psalm-immutable
 */
class TerritoryMk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MK';
    }
}
