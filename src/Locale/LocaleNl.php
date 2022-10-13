<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNl;

/**
 * Class LocaleNl - Dutch
 */
class LocaleNl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Nederlands';
    }

    public function endonymSortable()
    {
        return 'NEDERLANDS';
    }

    public function language()
    {
        return new LanguageNl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
