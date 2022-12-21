<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Kazakhstan';
    }

    public function code(): string
    {
        return 'KZ';
    }
}
