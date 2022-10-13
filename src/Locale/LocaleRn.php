<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRn;

/**
 * Class LocaleRn - Rundi
 */
class LocaleRn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ikirundi';
    }

    public function endonymSortable()
    {
        return 'IKIRUNDI';
    }

    public function language()
    {
        return new LanguageRn();
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
