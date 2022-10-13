<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZgh;

/**
 * Class LocaleZgh - Standard Moroccan Tamazight
 */
class LocaleZgh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
    }

    public function language()
    {
        return new LanguageZgh();
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
