<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryDg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Diego Garcia';
    }

    public function code(): string
    {
        return 'DG';
    }
}
