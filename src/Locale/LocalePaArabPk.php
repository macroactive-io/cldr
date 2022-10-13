<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocalePaArabPk
 */
class LocalePaArabPk extends LocalePaArab
{
    public function territory()
    {
        return new TerritoryPk();
    }
}
