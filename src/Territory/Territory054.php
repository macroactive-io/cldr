<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory054 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Melanesia';
    }

    public function code(): string
    {
        return '054';
    }
}
