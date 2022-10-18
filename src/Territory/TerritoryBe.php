<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BE - Belgium
 *
 * @psalm-immutable
 */
class TerritoryBe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BE';
    }
}
