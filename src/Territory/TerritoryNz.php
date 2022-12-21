<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'New Zealand';
    }

    public function code(): string
    {
        return 'NZ';
    }
}
