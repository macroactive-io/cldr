<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MP - Northern Mariana Islands
 *
 * @psalm-immutable
 */
class TerritoryMp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MP';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
