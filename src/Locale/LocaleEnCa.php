<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;

/**
 * Class LocaleEnCa - Canadian English
 */
class LocaleEnCa extends LocaleEn
{
    public function endonym()
    {
        return 'Canadian English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH, CANADIAN';
    }

    public function territory()
    {
        return new TerritoryCa();
    }
}
