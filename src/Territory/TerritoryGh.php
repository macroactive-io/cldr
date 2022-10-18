<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GH - Ghana
 *
 * @psalm-immutable
 */
class TerritoryGh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GH';
    }
}
