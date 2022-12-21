<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Turkey';
    }

    public function code(): string
    {
        return 'TR';
    }
}
