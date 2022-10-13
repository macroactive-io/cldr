<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDje;

/**
 * Class LocaleDje - Zarma
 */
class LocaleDje extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Zarmaciine';
    }

    public function endonymSortable()
    {
        return 'ZARMACIINE';
    }

    public function language()
    {
        return new LanguageDje();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
