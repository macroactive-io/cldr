<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FX - Metropolitan France
 *
 * @psalm-immutable
 */
class TerritoryFx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FX';
    }
}
