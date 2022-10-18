<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * 003 - North America
 *
 * @psalm-immutable
 */
class Territory003 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '003';
    }
}
