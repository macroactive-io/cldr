<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * WF - Wallis and Futuna
 *
 * @psalm-immutable
 */
class TerritoryWf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'WF';
    }
}
