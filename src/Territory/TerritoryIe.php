<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Ireland';
    }

    public function code(): string
    {
        return 'IE';
    }
}
