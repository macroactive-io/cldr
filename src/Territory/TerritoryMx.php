<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MX - Mexico.
 * @psalm-immutable
 */
class TerritoryMx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MX';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
