<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRo;

/**
 * Class LocaleRo - Romanian
 */
class LocaleRo extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'romanian_ci';
    }

    public function endonym()
    {
        return 'română';
    }

    public function endonymSortable()
    {
        return 'ROMANA';
    }

    public function language()
    {
        return new LanguageRo();
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
