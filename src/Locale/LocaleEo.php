<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEo;

/**
 * Class LocaleEo - Esperanto
 */
class LocaleEo extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'esperanto_ci';
    }

    public function endonym()
    {
        return 'esperanto';
    }

    public function endonymSortable()
    {
        return 'ESPERANTO';
    }

    public function language()
    {
        return new LanguageEo();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }
}
