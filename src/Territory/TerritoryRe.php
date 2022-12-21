<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryRe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Réunion';
    }

    public function code(): string
    {
        return 'RE';
    }
}
