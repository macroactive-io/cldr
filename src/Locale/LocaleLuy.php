<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLuy;

/**
 * Class LocaleLuy - Luyia
 */
class LocaleLuy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Luluhia';
    }

    public function endonymSortable()
    {
        return 'LULUHIA';
    }

    public function language()
    {
        return new LanguageLuy();
    }
}
