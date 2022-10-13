<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTg;

/**
 * Class LocaleTg - Tajik
 */
class LocaleTg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'тоҷикӣ';
    }

    public function language()
    {
        return new LanguageTg();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
