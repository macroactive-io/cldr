<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTs;

/**
 * Class LocaleTs - Tsonga
 */
class LocaleTs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Xitsonga';
    }

    public function endonymSortable()
    {
        return 'XITSONGA';
    }

    public function language()
    {
        return new LanguageTs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
