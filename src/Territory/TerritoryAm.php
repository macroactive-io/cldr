<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Armenia';
    }

    public function code(): string
    {
        return 'AM';
    }
}
