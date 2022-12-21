<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Guadeloupe';
    }

    public function code(): string
    {
        return 'GP';
    }
}
