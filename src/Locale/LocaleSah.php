<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSah;

/**
 * Class LocaleSah - Sakha
 */
class LocaleSah extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'саха тыла';
    }

    public function endonymSortable()
    {
        return 'САХА ТЫЛА';
    }

    public function language()
    {
        return new LanguageSah();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
