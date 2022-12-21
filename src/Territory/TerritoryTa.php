<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tristan da Cunha';
    }

    public function code(): string
    {
        return 'TA';
    }
}
