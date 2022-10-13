<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNah;

/**
 * Class LocaleNah - Nahuatl
 */
class LocaleNah extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Nahuatlahtolli';
    }

    public function endonymSortable()
    {
        return 'NAHUATLAHTOLLI';
    }

    public function language()
    {
        return new LanguageNah();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
