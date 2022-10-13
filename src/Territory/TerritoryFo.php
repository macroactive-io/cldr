<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FO - Faroe Islands.
 * @psalm-immutable
 */
class TerritoryFo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FO';
    }
}
