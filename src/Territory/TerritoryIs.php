<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Iceland';
    }

    public function code(): string
    {
        return 'IS';
    }
}
