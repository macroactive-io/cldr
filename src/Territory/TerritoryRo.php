<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryRo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Romania';
    }

    public function code(): string
    {
        return 'RO';
    }
}
