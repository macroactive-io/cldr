<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * IE - Ireland
 *
 * @psalm-immutable
 */
class TerritoryIe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IE';
    }
}
