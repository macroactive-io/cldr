<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTt;

/**
 * Class LocaleTt - Tatar
 */
class LocaleTt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'татар';
    }

    public function endonymSortable()
    {
        return 'ТАТАР';
    }

    public function language()
    {
        return new LanguageTt();
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
