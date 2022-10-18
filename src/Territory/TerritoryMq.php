<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MQ - Martinique
 *
 * @psalm-immutable
 */
class TerritoryMq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MQ';
    }
}
