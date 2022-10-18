<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * IM - Isle of Man
 *
 * @psalm-immutable
 */
class TerritoryIm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IM';
    }
}
