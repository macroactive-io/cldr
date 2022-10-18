<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NT - Neutral Zone
 *
 * @psalm-immutable
 */
class TerritoryNt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NT';
    }
}
