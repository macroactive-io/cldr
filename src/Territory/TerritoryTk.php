<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TK - Tokelau
 *
 * @psalm-immutable
 */
class TerritoryTk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TK';
    }
}
