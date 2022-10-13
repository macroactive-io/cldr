<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LocaleEnUs - American English
 */
class LocaleEnUs extends LocaleEn
{
    public function endonym()
    {
        return 'American English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH, AMERICAN';
    }

    public function territory()
    {
        return new TerritoryUs();
    }
}
