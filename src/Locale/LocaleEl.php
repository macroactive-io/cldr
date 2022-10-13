<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;

/**
 * Class LocaleEl - Greek
 */
class LocaleEl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ελληνικά';
    }

    public function endonymSortable()
    {
        return 'ΕΛΛΗΝΙΚΆ';
    }

    public function language()
    {
        return new LanguageEl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
