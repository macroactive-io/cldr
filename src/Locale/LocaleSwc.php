<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSwc;

/**
 * Class LocaleSwc - Congo Swahili
 */
class LocaleSwc extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kiswahili ya Kongo';
    }

    public function endonymSortable()
    {
        return 'KISWAHILI YA KONGO';
    }

    public function language()
    {
        return new LanguageSwc();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
