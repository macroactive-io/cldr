<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RO - Romania.
 * @psalm-immutable
 */
class TerritoryRo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RO';
    }
}
