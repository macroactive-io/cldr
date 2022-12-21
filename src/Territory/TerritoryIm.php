<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Isle of Man';
    }

    public function code(): string
    {
        return 'IM';
    }
}
