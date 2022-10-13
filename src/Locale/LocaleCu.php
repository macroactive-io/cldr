<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCu;

/**
 * Class LocaleCu - Old Church Slavonic
 */
class LocaleCu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'церковнослове́нскїй';
    }

    public function endonymSortable()
    {
        return 'ЦЕРКОВНОСЛОВЕ́НСКЇЙ';
    }

    public function language()
    {
        return new LanguageCu();
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
