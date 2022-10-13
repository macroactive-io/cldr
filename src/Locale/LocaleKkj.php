<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKkj;

/**
 * Class LocaleKkj - Kako
 */
class LocaleKkj extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kakɔ';
    }

    public function endonymSortable()
    {
        return 'KAKO';
    }

    public function language()
    {
        return new LanguageKkj();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
