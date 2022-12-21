<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBj extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Benin';
    }

    public function code(): string
    {
        return 'BJ';
    }
}
