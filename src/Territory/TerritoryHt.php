<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * HT - Haiti
 *
 * @psalm-immutable
 */
class TerritoryHt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HT';
    }
}
