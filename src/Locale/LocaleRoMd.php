<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRoMd - Moldavian
 * @psalm-immutable
 */
class LocaleRoMd extends LocaleRo
{
    public function endonym(): string
    {
        return 'moldovenească';
    }

    public function endonymSortable(): string
    {
        return 'MOLDOVENEASCA';
    }

    public function territory(): TerritoryMd
    {
        return new TerritoryMd();
    }
}
