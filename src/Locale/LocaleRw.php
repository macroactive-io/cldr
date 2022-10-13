<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRw;

/**
 * Class LocaleRw - Kinyarwanda
 */
class LocaleRw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kinyarwanda';
    }

    public function endonymSortable()
    {
        return 'KINYARWANDA';
    }

    public function language()
    {
        return new LanguageRw();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
