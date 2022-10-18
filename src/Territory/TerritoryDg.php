<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * DG - Diego Garcia
 *
 * @psalm-immutable
 */
class TerritoryDg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DG';
    }
}
