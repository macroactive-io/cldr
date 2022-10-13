<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePt;

/**
 * Class LocalePt - Portuguese
 */
class LocalePt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'português';
    }

    public function endonymSortable()
    {
        return 'PORTUGUES';
    }

    public function language()
    {
        return new LanguagePt();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
