<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;

/**
 * Class LocaleEnCa - Canadian English
 * @psalm-immutable
 */
class LocaleEnCa extends LocaleEn
{
    public function endonym(): string
    {
        return 'Canadian English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, CANADIAN';
    }

    public function territory(): TerritoryCa
    {
        return new TerritoryCa();
    }
}
