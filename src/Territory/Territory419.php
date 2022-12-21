<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory419 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Latin America and the Caribbean';
    }

    public function code(): string
    {
        return '419';
    }
}
