<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HT - Haiti.
 * @psalm-immutable
 */
class TerritoryHt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HT';
    }
}
