<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSr;

/**
 * Class LocaleSr - Serbian
 */
class LocaleSr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'српски';
    }

    public function endonymSortable()
    {
        return 'СРПСКИ';
    }

    public function language()
    {
        return new LanguageSr();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
