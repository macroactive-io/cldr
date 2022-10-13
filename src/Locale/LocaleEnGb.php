<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LocaleEnGb - British English
 */
class LocaleEnGb extends LocaleEn
{
    public function endonym()
    {
        return 'British English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH, BRITISH';
    }

    public function territory()
    {
        return new TerritoryGb();
    }
}
