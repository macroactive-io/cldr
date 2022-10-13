<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocalePaArabPk
 * @psalm-immutable
 */
class LocalePaArabPk extends LocalePaArab
{
    public function territory(): TerritoryPk
    {
        return new TerritoryPk();
    }
}
