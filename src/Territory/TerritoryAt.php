<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Austria';
    }

    public function code(): string
    {
        return 'AT';
    }
}
