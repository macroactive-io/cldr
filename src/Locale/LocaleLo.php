<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLo;

/**
 * Class LocaleLo - Lao
 */
class LocaleLo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ລາວ';
    }

    public function language()
    {
        return new LanguageLo();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
