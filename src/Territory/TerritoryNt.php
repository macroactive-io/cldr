<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Neutral Zone';
    }

    public function code(): string
    {
        return 'NT';
    }
}
