<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Anguilla';
    }

    public function code(): string
    {
        return 'AI';
    }
}
