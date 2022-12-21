<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryWf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Wallis and Futuna';
    }

    public function code(): string
    {
        return 'WF';
    }
}
