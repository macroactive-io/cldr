<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FM - Federated States of Micronesia
 *
 * @psalm-immutable
 */
class TerritoryFm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FM';
    }
}
