<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryFk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Falkland Islands (Malvinas)';
    }

    public function code(): string
    {
        return 'FK';
    }
}
