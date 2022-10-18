<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IO - British Indian Ocean AbstractTerritory.
 * @psalm-immutable
 */
class TerritoryIo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IO';
    }
}
