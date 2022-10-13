<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSq;

/**
 * Class LocaleSq - Albanian
 */
class LocaleSq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'shqip';
    }

    public function endonymSortable()
    {
        return 'SHQIP';
    }

    public function language()
    {
        return new LanguageSq();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
