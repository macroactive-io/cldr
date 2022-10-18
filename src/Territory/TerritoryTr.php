<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TR - Turkey
 *
 * @psalm-immutable
 */
class TerritoryTr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TR';
    }
}
