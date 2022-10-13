<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBe;

/**
 * Class LocaleBe - Belarusian
 */
class LocaleBe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'беларуская';
    }

    public function endonymSortable()
    {
        return 'БЕЛАРУСКАЯ';
    }

    public function language()
    {
        return new LanguageBe();
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
