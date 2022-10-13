<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDe;

/**
 * Class LocaleDe - German
 */
class LocaleDe extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'german2_ci';
    }

    public function endonym()
    {
        return 'Deutsch';
    }

    public function endonymSortable()
    {
        return 'DEUTSCH';
    }

    public function language()
    {
        return new LanguageDe();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
