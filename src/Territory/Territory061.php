<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory061 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Polynesia';
    }

    public function code(): string
    {
        return '061';
    }
}
