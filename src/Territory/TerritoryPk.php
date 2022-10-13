<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PK - Pakistan.
 */
class TerritoryPk extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PK';
    }

    public function firstDay()
    {
        return 0;
    }
}
