<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUz;

/**
 * Class LocaleUz - Uzbek
 */
class LocaleUz extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'o‘zbek';
    }

    public function endonymSortable()
    {
        return 'OZBEK';
    }

    public function language()
    {
        return new LanguageUz();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
