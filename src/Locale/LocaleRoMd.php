<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRoMd - Moldavian
 */
class LocaleRoMd extends LocaleRo
{
    public function endonym()
    {
        return 'moldovenească';
    }

    public function endonymSortable()
    {
        return 'MOLDOVENEASCA';
    }

    public function territory()
    {
        return new TerritoryMd();
    }
}
