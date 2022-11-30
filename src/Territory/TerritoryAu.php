<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AU - Australia
 *
 * @psalm-immutable
 */
class TerritoryAu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AU';
    }
}
