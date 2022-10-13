<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLn;

/**
 * Class LocaleLn - Lingala
 */
class LocaleLn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'lingála';
    }

    public function endonymSortable()
    {
        return 'LINGALA';
    }

    public function language()
    {
        return new LanguageLn();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
