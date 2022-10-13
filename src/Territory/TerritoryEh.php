<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EH - Western Sahara.
 * @psalm-immutable
 */
class TerritoryEh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EH';
    }
}
