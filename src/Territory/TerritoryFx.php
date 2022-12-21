<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryFx extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Metropolitan France';
    }

    public function code(): string
    {
        return 'FX';
    }
}
