<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * RO - Romania
 *
 * @psalm-immutable
 */
class TerritoryRo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RO';
    }
}
