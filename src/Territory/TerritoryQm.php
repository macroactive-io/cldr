<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryQm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Private use';
    }

    public function code(): string
    {
        return 'QM';
    }
}
