<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVi;

/**
 * Class LocaleVi - Vietnamese
 */
class LocaleVi extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'vietnamese_ci';
    }

    public function endonym()
    {
        return 'Tiếng Việt';
    }

    public function endonymSortable()
    {
        return 'TIENG VIET';
    }

    public function language()
    {
        return new LanguageVi();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
