<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCs;

/**
 * Class LocaleCs - Czech
 */
class LocaleCs extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'czech_ci';
    }

    public function endonym()
    {
        return 'čeština';
    }

    public function endonymSortable()
    {
        return 'CESTINA';
    }

    public function language()
    {
        return new LanguageCs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
