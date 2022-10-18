<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FO - Faroe Islands
 *
 * @psalm-immutable
 */
class TerritoryFo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FO';
    }
}
