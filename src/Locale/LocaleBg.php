<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBg;

/**
 * Class LocaleBg - Bulgarian
 */
class LocaleBg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'български';
    }

    public function endonymSortable()
    {
        return 'БЪЛГАРСКИ';
    }

    public function language()
    {
        return new LanguageBg();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits()
    {
        return 2;
    }
}
