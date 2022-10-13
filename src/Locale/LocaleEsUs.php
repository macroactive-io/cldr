<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LocaleEsUs
 * @psalm-immutable
 */
class LocaleEsUs extends LocaleEs
{
    public function territory(): TerritoryUs
    {
        return new TerritoryUs();
    }
}
