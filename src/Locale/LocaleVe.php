<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVe;

/**
 * Class LocaleVe - Venda
 */
class LocaleVe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tshivenḓa';
    }

    public function endonymSortable()
    {
        return 'TSHIVENDA';
    }

    public function language()
    {
        return new LanguageVe();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
