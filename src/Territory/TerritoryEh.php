<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Western Sahara';
    }

    public function code(): string
    {
        return 'EH';
    }
}
