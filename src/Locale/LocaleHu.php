<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHu;

/**
 * Class LocaleHu - Hungarian
 */
class LocaleHu extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'hungarian_ci';
    }

    public function endonym()
    {
        return 'magyar';
    }

    public function endonymSortable()
    {
        return 'MAGYAR';
    }

    public function language()
    {
        return new LanguageHu();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
