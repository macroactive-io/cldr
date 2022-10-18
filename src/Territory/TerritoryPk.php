<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PK - Pakistan.
 * @psalm-immutable
 */
class TerritoryPk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PK';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
