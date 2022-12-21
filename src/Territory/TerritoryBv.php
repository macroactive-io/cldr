<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bouvet Island';
    }

    public function code(): string
    {
        return 'BV';
    }
}
