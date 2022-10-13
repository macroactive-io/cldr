<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIs;

/**
 * Class LocaleIs - Icelandic
 */
class LocaleIs extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'icelandic_ci';
    }

    public function endonym()
    {
        return 'íslenska';
    }

    public function endonymSortable()
    {
        return 'ISLENSKA';
    }

    public function language()
    {
        return new LanguageIs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
