<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryFm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Micronesia (Federated States of)';
    }

    public function code(): string
    {
        return 'FM';
    }
}
