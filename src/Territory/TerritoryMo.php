<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MO - Macao.
 * @psalm-immutable
 */
class TerritoryMo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MO';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
