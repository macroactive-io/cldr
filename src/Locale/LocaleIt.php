<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIt;

/**
 * Class LocaleIt - Italian
 */
class LocaleIt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'italiano';
    }

    public function endonymSortable()
    {
        return 'ITALIANO';
    }

    public function language()
    {
        return new LanguageIt();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
