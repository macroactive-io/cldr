<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHr;

/**
 * Class LocaleHr - Croatian
 */
class LocaleHr extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'croatian_ci';
    }

    public function endonym()
    {
        return 'hrvatski';
    }

    public function endonymSortable()
    {
        return 'HRVATSKI';
    }

    public function language()
    {
        return new LanguageHr();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     *
     * @return string
     */
    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
