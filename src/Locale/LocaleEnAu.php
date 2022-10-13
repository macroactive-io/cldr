<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAu;

/**
 * Class LocaleEnAu - Australian English
 */
class LocaleEnAu extends LocaleEn
{
    public function endonym()
    {
        return 'Australian English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH, AUSTRALIAN';
    }

    public function territory()
    {
        return new TerritoryAu();
    }
}
