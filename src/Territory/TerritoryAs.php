<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AS - American Samoa.
 * @psalm-immutable
 */
class TerritoryAs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AS';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
