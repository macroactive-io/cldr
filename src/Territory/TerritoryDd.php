<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryDd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'German Democratic Republic';
    }

    public function code(): string
    {
        return 'DD';
    }
}
