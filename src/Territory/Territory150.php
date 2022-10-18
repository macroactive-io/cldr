<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * 150 - Europe
 *
 * @psalm-immutable
 */
class Territory150 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '150';
    }
}
