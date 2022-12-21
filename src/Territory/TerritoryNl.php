<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Netherlands';
    }

    public function code(): string
    {
        return 'NL';
    }
}
